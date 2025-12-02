pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main',
                    url: 'https://github.com/AlmaRahmatiaNingrum/Baru12-2-2025.git'
            }
        }

        stage('Run PHP') {
            steps {
                powershell 'php index.php'
            }
        }
    }
}
