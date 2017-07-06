# yii2 开发多版本api实践

## 目录结构
    + config/
        + api-actions.php
        + api-actions/
            v1.php  //定义各版本actions映射
            v2.php  
    + controllers/
        ApiController.php //根据请求header中的接口版本，加载api-actions
        + actions/
            + v1/
                + user/
                    UserInfoAction.php
                + order/
                    ...
## 使用方式
1.  新加接口action时，确定当前接口所属的版本，写入controllers/actions/v{$version}/TestAction 

2.  config/api-actions/v{$version}.php中写入一条映射
```
test => controllers/actions/v{$version}/TestAction
```

## 规则
1. 配置文件中的配置为当前版本的特有feature;
2. 配置文件中的actions最新的版本配置会覆盖老的配置，同时也会继承老版本的接口;
3. 正常情况下，只有大版本更新时，才新建actions配置。

## this is hotfix
