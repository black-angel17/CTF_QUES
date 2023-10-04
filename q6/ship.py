import socket
import threading
import subprocess
# Create a socket object
server_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

# Define the host and port on which the server will listen
host = '127.0.0.1'
port = 12345

# Bind the socket to the host and port
server_socket.bind((host, port))

# Listen for incoming connections
server_socket.listen(100)

print(f"Server is listening on {host}:{port}")

# Function to handle a single client connection
def handle_client(client_socket, addr):
    print(f"Connection from {addr} accepted.")

    # Send a welcome message to the client
    message = "Welcome to the -------SHIP_PORT------\n"
    client_socket.send(message.encode('utf-8'))

    while True:
        #
        data= client_socket.recv(1024).decode('utf-8')

        
        m1 ="IM A TOUR GUIDE WHICH SHIP YOU NEED TO BOARD\n\n"
        client_socket.send(m1.encode('utf-8'))
        msg ="SHIP(1) -TITANIC\nSHIP(2) -NOBITA\nSHIP(3) -DESTROYER\nSHIP(4) -BLACKPERL\nSHIP(5) -FLYINGDUTCHMAN\n"
        client_socket.send(msg.encode('utf-8'))    
        flag=""
        while True:
        
            m2 = "\nEnter the SHIP NO YOU NEED TO BOARD::\n\n"
            client_socket.send(m2.encode('utf-8'))
            data= client_socket.recv(1024).decode('utf-8')
            

            if int(data) == 1:
                m3 ="\nTHis is FOR VIP NOT FOR YOU\n"
                client_socket.send(m3.encode('utf-8'))
            if int(data) == 2:
                m3 ="\n SORRY THIS SHIP SAILED ALREADY\n"
                client_socket.send(m3.encode('utf-8')) 
            if int(data) == 3:
                m3 ="\nPAY THE CASH OF $50000 \n"
                client_socket.send(m3.encode('utf-8')) 
            if int(data) == 4:
                m3 ="\nFLAG IS INSIDE THIS SHIP\n"
                client_socket.send(m3.encode('utf-8'))
                
                while True:
                    m2 = "\nEnter the ---PID--- of this SHIP TO GET THE FLAG::\n\n"
                    client_socket.send(m2.encode('utf-8'))
                    data= client_socket.recv(1024).decode('utf-8')
                    command ="pgrep -f ship.py"
                    output = subprocess.check_output(command, shell=True, stderr=subprocess.STDOUT, text=True)
                    pids = output.strip().split('\n')
                    first_pid = pids[0]
                    print(int(first_pid))

                    if int(data) == int(first_pid):
                        flag ="bYtE_BuSteRs{SaIl-The_Sea_wItH_tHi$}"
                        client_socket.send(flag.encode('utf-8'))
                        m5 ="\n\nCONTINUE___SAILING"
                        client_socket.send(m5.encode('utf-8'))
                        #client_socket.close()
                        
                    else:
                        m5 ="WRONG PID"
                        client_socket.send(m5.encode('utf-8'))     

            if int(data) == 5:
                m3 ="\nYOURE ON WAITING LIST\n"
                client_socket.send(m3.encode('utf-8'))


            else:
                m9 = "TRY --AGAIN"
                client_socket.send(flag.encode('utf-8'))

               
                    

while True:
    # Accept a client connection
    client_socket, addr = server_socket.accept()

    # Create a new thread to handle the client
    client_handler = threading.Thread(target=handle_client, args=(client_socket, addr))
    client_handler.start()
