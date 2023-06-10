#include <stdio.h>
#include <unistd.h>
#include <assert.h>

int main(int argc, char **argv, char **envp) {

    int fd;
    int n;
    int context; 
    char buf[1024];

    if (argc != 2) {
        puts("Usage: cat2 <FILE>");
        return 1;
    }

    puts("Welcome to cat2!");
    puts("This program is a side project I've been working on to be a more secure version of the popular cat command");
    puts("Unlike cat, the cat2 command performs additional checks on the user's security context");
    puts("This allows the command to be security compliant even if executed with SUID permissions!\n");
    puts("Checking the user's security context...");
    context = check_security_contex(argv[1]);
    puts("Context has been checked, proceeding!\n");

    if (context == 0) {
        puts("The user has access, outputting file...\n");
        fd = open(argv[1], 0);
        assert(fd >= 0 && "Failed to open the file");
        while((n = read(fd, buf, 1024)) > 0 && write(1, buf, n) > 0);
    } else {
        puts("[SECURITY BREACH] The user does not have access to this file!");
        puts("Terminating...");
        return 1;
    }
    
    return 0;
}

int check_security_contex(char *file_name) {

    int context_result;

    context_result = access(file_name, R_OK);
    usleep(500);

    return context_result;
}