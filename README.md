该源码来源于github！

安装步骤：
1、下载phpStudy2014并安装，环境支持PHP5.2，网站源码复制到网站根目录
2、配置网站数据库 目录下的SQL文件中的数据
3、配置文件
     E:\phpStudy\www\includes\configs\DatabaseConfig.php //数据库设置
        $world 游戏世界库
        $characters 角色库
        $realm 账号库
        $wow 网站数据库
     E:\phpStudy\www\includes\configs\WoWConfig.php //网站设置
4、源码补丁tools文件夹下 根据自己的源码打入对应的patch文件 并将对应的SQL文件打入角色库中