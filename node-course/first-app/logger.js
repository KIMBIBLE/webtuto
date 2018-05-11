var message = ''; //it only can access in this file.
global.console.log('aa');

console.log(module);
console.log(global.module);

/* module export / import */
// logger.js
var url = 'http://mylogger.io/log';
function log(message){
    console.log(message);
}

module.exports.log = log;
module.exports.endPoint = url;

console.log('[*] logger.js : ', module);
