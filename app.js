const gateway = require('fast-gateway')
const port = 9000;
gateway({
    routes: [{
      prefix: '/cgi-bin',
      prefixRewrite: '/cgi-bin',
      target: 'https://qyapi.weixin.qq.com'
    }]
}).start(port).then(server => {
    console.log(`server started on port ${port}`)
})