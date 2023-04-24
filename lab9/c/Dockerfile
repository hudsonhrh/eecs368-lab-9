# Set the base image to use
FROM gcc:latest
# Copy the C program into the container
COPY ScorePossibilities.c .
# Compile the C program
RUN gcc -o ScorePossibilities ScorePossibilities.c
# Set the command to run when the container starts
CMD ["./ScorePossibilities"]