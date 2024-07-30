# 使用较小的 Node.js 基础镜像
FROM node:18-alpine

# 设置工作目录
WORKDIR /app

# 复制 package.json 和 package-lock.json
COPY package*.json ./

# 安装项目依赖
RUN npm install

# 复制所有应用文件到容器中
COPY app.js .

# 暴露应用运行端口
EXPOSE 9000

# 启动应用
CMD ["node", "app.js"]
