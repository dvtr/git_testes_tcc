var fs = require('fs');

var nlinhas = fs.readFile(process.argv[2], function(err, data){
	if (err) throw err;

	var str = data.toString();
	console.log(str.split('\n').length - 1);
});

