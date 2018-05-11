const express = require('express');
const socket = require('socket.io');

const port = 4000;

//App setup
const app = express();
const server = app.listen(port, () => {
    console.log('success')
})

// Static files
app.use(express.static('public'));

//Socket setup
const io = socket(server);

io.on('connection', (socket) => {
    console.log('made socket connection', socket.id);

    //Handle chat event
    socket.on('chat', (data) => {
        console.log('handle : ', data.handle)
        console.log('message : ', data.message);
        io.sockets.emit('chat', data);
    });

    socket.on('typing', (data) => {
        console.log('handle : ', data);
        socket.broadcast.emit('typing', data);
    });
});
