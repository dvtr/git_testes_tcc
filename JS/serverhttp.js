var fs = require('fs');
var http = require('http');

var port = process.argv[2];
var file = process.argv[3];

http.createServer(function(req, res){
	var rs = fs.createReadStream(file, {encoding: 'utf8', autoClose: true});
	rs.pipe(res);

}).listen(port);

