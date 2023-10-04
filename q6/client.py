import socket

# Create a socket object
client_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

# Define the server's host and port
server_host = '127.0.0.1'
server_port = 12345

# Connect to the server
client_socket.connect((server_host, server_port))

# Receive the welcome message from the server
welcome_message = client_socket.recv(1024).decode('utf-8')
print(welcome_message)

# Send data to the server
data = "Hello, server!"
client_socket.send(data.encode('utf-8'))

# Close the client socket
client_socket.close()
