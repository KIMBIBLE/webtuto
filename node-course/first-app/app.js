
/* ex1
// execute : node app.js
console.log('--------------------');

function sayHello(name){
    console.log('Hello' + name);
}

sayHello('bbkim');
console.log('bbkim92');
*/


/*ex2
// Error Occured : window is not defined
// In node, we don't have window, document object
// using in browser

console.log('--------------------');
console.log('aa'); //console : global scope object
console.log(window);
*/


/* ex3 : Node Module System
app.js
logger.js
hello.js
*/

/*
// require('./logger.js');
console.log('--------------------');
const logger = require('./logger');
const hello = require('./hello.js')

console.log('[*] app.js', module);
console.log(logger);

logger.log('message');
logger.log(logger.endPoint);

hello('bbkim');
*/





/* each file look like function!!
Immediately-invoked function expression (IFFY)
https://en.wikipedia.org/wiki/Immediately-invoked_function_expression

(function (exports, require, module, __filename, __dir
name)

=> node doesn't excute code directly.
Always wrap!
*/



/*
console.log('--------------------');
console.log(require);
console.log(__filename);
console.log(__dirname);
*/
