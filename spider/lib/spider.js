/**
 * spider.js
 * 封装的spider
 */
const superagent = require('superagent');
const userAgents = require('../config/userAgents.js');
let spider = {};

let header = {};
header['User-Agent'] = userAgents[parseInt(Math.random() * userAgents.length)];

console.log('init request header ...');
console.log(header);

// 请求
spider.crawl = (url) => {
    return new Promise(function (resolve, reject) {
        console.log('request ' + url + ' ...');
        superagent.get(url).set(header).end(function (error, content) {
            if (error) {
                reject(error);
            }
            else {
                console.log('request ok');
                resolve(content);
            }
        });
    });
};

module.exports = spider;
