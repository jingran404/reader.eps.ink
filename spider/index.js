const method = require('./logic/method.js');
const spider = require('./spider.js');
const file = require('./file.js');
const model = require('./model/index.js');

var start = async function () {
    //let homeUrl = 'http://www.shuquge.com/';
    //let htmlContent = await spider.crawl(homeUrl);
    //let htmlData = method.analyzeHome(htmlContent);
    //console.log(htmlData);

    //let categoryList = await model.categoryModel.getCategoryList();
    model.closePool();
};

start();


