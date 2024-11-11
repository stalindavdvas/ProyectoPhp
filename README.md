# Download and Run the PHP Project Using Docker

Follow the steps below to download the Docker image of the project and run it on your local machine.

## Prerequisites

Make sure you have the following installed on your system:

1. **Docker**: [Install Docker](https://docs.docker.com/get-docker/) if it is not already installed.

2. **Git**: You will need Git to clone the repository. If Git is not installed, you can [install Git here](https://git-scm.com/downloads).

## Steps to Download and Run the Docker Image

### Step 1: Clone the Repository

Clone the repository from GitHub to your local machine using the following command:

https://github.com/stalindavdvas/ProyectoPhp.git

Navigate to the project directory:

cd ProyectoPhp

Step 2: Build the Docker Image

If you want to build the Docker image locally, you can use the following command to create the image from the Dockerfile in the project:

docker build -t proyectophp .

Alternatively, the Docker image is already available in a remote repository of Docker Hub, you can pull it using the following command:

docker pull stalinvasco2024/proyectophp:latest

Step 3: Run the Docker Container
To run the container from the Docker image, use the the docker desktop aplication and find the image have you had created before. 

Step 4: Access the Application
Once the container is running, open your browser and go to:

http://localhost:8080 or the port have you used.

You should now be able to see your PHP application running locally.

### Step 5: if you want to test the project without download the image, you should go to visit the link:

https://proyectojava-production.up.railway.app/

The aplicaction is deploying on railway cloud.

