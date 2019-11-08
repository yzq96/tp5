define({ "api": [
  {
    "type": "post",
    "url": "/Index/getVip",
    "title": "获取vip列表   页面加载时自动获取",
    "name": "GetVip",
    "group": "test",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "req1",
            "description": "<p>请求值</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "res1",
            "description": "<p>返回值1</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "{\n　　res1:\"test\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "src/test.php",
    "groupTitle": "测试"
  }
] });
