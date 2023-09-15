# Use the official Node.js image as a base image
FROM node:14

# Set working directory
WORKDIR /app

# Copy the Vue.js app into the container
COPY . .

# Install Vue.js dependencies
RUN npm install

# Expose port 
EXPOSE 5173

# Start the Vue.js production server
CMD ["npm", "run", "start"]
