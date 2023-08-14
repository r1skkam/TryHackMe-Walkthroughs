#include <stdio.h>
#include <unistd.h>
#include <pthread.h>
#include <sys/socket.h>
#include <arpa/inet.h>
#include <stdlib.h>
#include <sys/sendfile.h>
#include <sys/stat.h>
#include <string.h>
#include <fcntl.h>

typedef struct {
    int sock;
    struct sockaddr address;
    int addr_len;
} connection_t;

int money;

void *run_thread(void *ptr) {

    long addr;
    char *buffer;
    int buffer_len = 1024;
    char balance[512];
    int balance_length;
    connection_t *conn;

    if (!ptr) pthread_exit(0);

    conn = (connection_t *)ptr;
    addr = (long)((struct sockaddr_in *) &conn->address)->sin_addr.s_addr;
    buffer = malloc(buffer_len + 1);
    buffer[buffer_len] = 0;
    
    read(conn->sock, buffer, buffer_len);
    
    if (strstr(buffer, "deposit")) {
        money += 10000;
    } else if (strstr(buffer, "withdraw")) {
        money -= 10000;
    } else if (strstr(buffer, "purchase flag")) {
        if (money >= 15000) {
            sendfile(conn->sock, open("/home/sprint/flag", O_RDONLY), 0, 128);
            money -= 15000;
        } else {
            write(conn->sock, "Sorry, you don't have enough money to purchase the flag\n", 56);
        }
    }

    balance_length = snprintf(balance, 1024, "Current balance: %d\n", money);
    write(conn->sock, balance, balance_length);
    
    usleep(1);
    money = 0;
    
    close(conn->sock);
    free(buffer);
    free(conn);
    
    pthread_exit(0);
}

int main(int argc, char **argv) {

    int sock = -1;
    int port = 1337;
    struct sockaddr_in address;
    connection_t *connection;
    pthread_t thread;

    sock = socket(AF_INET, SOCK_STREAM, IPPROTO_TCP);
    setsockopt(sock, SOL_SOCKET, SO_REUSEADDR, &(int){1}, sizeof(int));

    address.sin_family = AF_INET;
    address.sin_addr.s_addr = INADDR_ANY;
    address.sin_port = htons(port);

    if (bind(sock, (struct sockaddr *) &address, sizeof(struct sockaddr_in)) < 0) {
        fprintf(stderr, "Cannot bind to port %d\n", port);
        return -1;
    }
    
    if (listen(sock, 32) < 0) {
        fprintf(stderr, "Cannot listen on port %d\n", port);
        return -1;
    }

    fprintf(stdout, "Listening for connections on port %d...\n", port);
    fprintf(stdout, "Accepted commands: \"deposit\", \"withdraw\", \"purchase flag\"\n");

    while (1) {
        connection = (connection_t *) malloc(sizeof(connection_t));
        connection->sock = accept(sock, &connection->address, &connection->addr_len);
        if (connection->sock <= 0) {
            free(connection);
        } else {
            fprintf(stdout, "Connection received! Creating a new handler thread...\n");
            pthread_create(&thread, 0, run_thread, (void *) connection);
            pthread_detach(thread);
        }
    }
    
    return 0;
}
