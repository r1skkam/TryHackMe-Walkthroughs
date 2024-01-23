FROM node:19-slim

WORKDIR /usr/src/app
ENV DB_HOST=db
ENV DB_USER=root
ENV DB_PASS=Ng1-f3!Pe7-e5?Nf3xe5
ENV DB_DATABASE=timetracking
ENV LOG_FILE=/logs/tt.log

COPY package*.json ./
RUN npm install

COPY ./public ./public
COPY ./views ./views
COPY app.js .

EXPOSE 8080
CMD [ "node", "app.js"]
