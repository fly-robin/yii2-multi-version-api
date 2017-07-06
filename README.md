# yii2 开发多版本api实践

## 使用方式
1.  新加接口action时，确定当前接口所属的版本，写入controllers/actions/v{$version}/TestAction 

2.  config/api-actions/v{$version}.php中写入一条映射
```
test => controllers/actions/v{$version}/TestAction
```

## 规则
1. 配置文件中的配置为当前版本的feature;
2. 配置文件中的actions最新的版本配置会覆盖老的配置，同时也会继承老版本的接口;
3. 正常情况下，只有大版本更新时，才新建actions配置。

## this is hotfix
