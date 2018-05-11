setup:
	php composer.phar install
startup-api:
	php api/yii serve -p 3000
startup-frontend:
	php frontend/yii serve -p 3001
startup-backend:
	php backend/yii serve -p 3002
