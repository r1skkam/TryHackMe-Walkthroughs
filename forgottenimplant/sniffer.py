import logging
import time
from pathlib import Path

from scapy.all import *

logging.basicConfig(filename='/home/fi/sniffer.log', level=logging.DEBUG)

class PacketsHosts():
    def __init__(self, DET_TH=10, hosts_file='/home/ada/.implant/hosts'):
        self.DET_TH = DET_TH  # Threshold for an active host
        self.hosts_file = Path(hosts_file)
        self.packets = {}
        self.hosts = []

    def write_hosts(self):
        if len(self.hosts) > 0:
            try:
                self.hosts_file.write_text('\n'.join(self.hosts) + '\n', )
                logging.info(f'Writing hosts: {self.hosts}')
            except FileNotFoundError:
                logging.error(f'{self.hosts_file} not found')
            except Exception as e:
                logging.error(e)
        else:
            logging.debug('Nothing new to write')

    def check_status(self):
        for host, p in self.packets.items():
            if len(p['ports'].keys()) >= self.DET_TH:
                if host[0:3] == '10.':  # Only internal hosts
                    if host not in self.hosts:
                        self.hosts.append(host)
                        logging.info(f'New active internal host detected: {host} (Hosts: {self.hosts})')
                        self.write_hosts()
                else:
                    logging.info(f'New active external host detected: {host} (Hosts: {self.hosts})')

    def tcp_monitor_callback(self, pkt):
        ip = pkt.sprintf("%IP.src%")
        port = pkt.sprintf("%IP.dport%")

        if ip not in self.packets.keys():
            self.packets[ip] = {'packets': 1, 'ports': {}}
        else:
            self.packets[ip]['packets'] += 1

        if port not in self.packets[ip]['ports'].keys():
            self.packets[ip]['ports'][port] = 1
        else:
            self.packets[ip]['ports'][port] += 1

        self.check_status()


if __name__ == "__main__":
    packets_hosts = PacketsHosts()
    sniff(prn=packets_hosts.tcp_monitor_callback, filter="tcp and inbound and not port 22", store=0)