var mongoose     = require('mongoose');
var Schema       = mongoose.Schema;

var ShowDate = new Schema({
    date: Date,
    seats: [ Boolean ]
});

var Project   = new Schema({
  title: String,
  description: String,
  dates: [ ShowDate ]
});

module.exports = mongoose.model('Show', Show);