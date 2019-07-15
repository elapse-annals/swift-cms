## 介绍
一个简洁易用的 CMS 软件，主要使用 Laravel + Vue 进行项目构建现代化 CMS

## 目的
- 解决使用三方 CMS 的调试
- 易于处理 sitemap，静态化，模本半自动化等
- 内容多语言化解决方案




## 进展
- 查阅 octobercms 内容
    - jquery 通信，twig 渲染模版（不考虑借鉴）

## Todo
- 设计基础功能与结构
- 设计后端布局
- 设计基本前端布局
- 主要功能
    - 首页，列表，文章，[专题]
        - 图片内容编辑 ，列表，文章缩略图
    - [文章标签功能]
    - blade 拆分（banner，list，hotList）
    - [模版可配置，可切换]
    - title,keyword,content 等可[组合]配置
    - 模版自动生成（根据类型注入标签，仅支持后端渲染页面）
    - [sitemap 生成]
    - [内容采集]
    - [三方网站对接同步]
    - 三方 CMS 对接同步
    - 全文搜索

## 
Infrastructure Framework Come From [LaravelPlus](https://github.com/ElapseAnnals/LaravelPlus)
