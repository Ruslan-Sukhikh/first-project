1. Создать джоб в Jenkins с параметрами:
- Это - параметризованная сборка
	- String Parameter 
	  - Имя (site)
	- Choice Parameter
	  - Имя (wp_ver)
	  - Варианты (Указываем нужные версии WP - 5.6 5.5 )
- Pipeline
	- Defination
	  - Pipeline script from SCM
	- SCM 
	  - Git
	- Repositories
	  - Repository URL - https://github.com/Ruslan-Sukhikh/update_wp.git
	- Branches to build
	  - Branch Specifier - */master
	- Script Path - jenkins_files/update_wp.jenkins        	  


2. Скопировать файл "check_wp_ver.sh" в /var/lib/jenkins/jobs/Update_WP/