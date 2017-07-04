# cookie

cookie属于浏览器中的一个存储空间，里面可以存储数据。

可以存，也可以取



cookie是以域名为单位存储的，每个域名的cookie之间是相互隔离的，也就是说不可以互相操作

比如： 在itcast.cn 这个域名的cookie中存了一条数据
在 studyit.com 中能够使用上面存储的内容吗？？   不可以！


cookie 是有容量限制的， 每个域名可以存储的cookie不能超过4KB

存储单位：
1. bit    位
2. Byte   字节   8bit
3. KB   千字节 1024Byte
4. MB   兆字节 1024KByte
5. GB	吉字节 1024MB
6. TB   太字节 1024GB      

cookie 有时限的，有声明周期的，也就是说cookie是会过期的
默认情况下cookie的生命会在浏览器关闭的时候结束！
也可以手动的设置cookie的过期时间！


cookie也是分路径的
在www.studyit.com/dashboard/index   往cookie中存储了一个数据
在www.studyit.com/    				是不可以访问上面存储的内容的

子级路径中可以访问父级路径中存储的cookie，但是父级路径不能访问子级路径中存储的cookie

一般情况下，都会直接将cookie存储到根目录下面去，这样全站所有的路径中都可以访问了。

cookie存储的路径是可以设置的！

一个域名下的cookie是在该域名下面所有的页面中都可以使用的！



www.studyit.com
www.studyit.com/dashboard/index
www.studyit.com/teacer/add



当前域名中所有的cookie会伴随着每一次请求发送给服务器！！！