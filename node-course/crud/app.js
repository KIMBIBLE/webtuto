const express = require('express')
const bodyParser = require('body-parser')
const MongoClient = require('mongodb').MongoClient
const app = express()
const mongoURL = 'mongodb://localhost:27017'
var db

MongoClient.connect(mongoURL, (err, client) => {
    if (err) return console.log(err)
    db = client.db('star-wars-quotes')
    app.listen(3000, ()=>{
        console.log('listening on 3000')
    })
})

app.set('view engine', 'ejs')

app.use(bodyParser.urlencoded({extended:true}))

app.get('/', (req, res) => {
  //res.send('Hello World');
  //res.sendFile(__dirname + '/index.html')
  var cursor = db.collection('quotes').find().toArray((err, result) => {
      if(err) return console.log(err)

      // renders index.ejx
      console.log(result)
      res.render('index.ejs', {quotes : result})
  })
})

app.post('/quotes', (req, res) => {
  console.log('Hellooooooooooooooooo!')
  console.log(req.body)

  db.collection('quotes').save(req.body, (err, result) => {
      if (err) return console.log(err)

      console.log('saved to database')
      res.redirect('/')
  })
})
