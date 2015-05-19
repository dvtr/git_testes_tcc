var soma = 0;
var i;

for (i = 2; i < process.argv.length; i++)
	soma += Number(process.argv[i]);

console.log(soma);
