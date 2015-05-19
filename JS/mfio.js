
var fs = require('fs');

var buf = fs.readFileSync(process.argv[2], 'utf8');

var str = buf.toString();

var nlinhas = str.split('\n');

console.log(nlinhas.length - 1);

