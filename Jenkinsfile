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
                powershell '''
                    if (Test-Path "index.php") {
                        Write-Host "Menjalankan index.php..."
                        php index.php
                    } else {
                        Write-Host "index.php TIDAK ditemukan!"
                        exit 1
                    }
                '''
            }
        }
    }

    post {
        success {
            echo 'Pipeline berjalan dengan sukses!'
        }
        failure {
            echo 'Pipeline gagal. Periksa error di console.'
        }
    }
}
