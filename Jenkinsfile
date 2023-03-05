pipeline {
  agent any
  stages {
      
    stage ("Git-Checkout") {
      steps {
        echo "Checking out from Git repo"
        git branch: 'main', url: 'https://github.com/alexisromriv/user-service'
        
      }
    }

    stage ("Unit-tests") {
      steps {
        echo "Unit tests"
      }
    }
    
    stage('tmp Prune Docker data') {
        steps {
            bat 'docker system prune -a --volumes -f'
        }
    }

    stage ("Build") {
      steps {
        bat "docker-compose up --build -d"
        echo "Hello, world!"
      }
    }
    
    stage ("Acceptance-tests") {
      steps {
        echo "Hello, world!"
      }
    }
    
    stage ("Deploy") {
      steps {
        bat 'copy .env.example .env'
        bat 'xcopy /y /s ".\\*" "C:\\xampp\\htdocs\\jenkins"'
       // bat 'composer install'
        echo "Hello, world!"
      }
    }
    
    
    stage ("Quality Gate") {
      steps {
        echo "Hello, world!"
      }
    }
    // stage('Checkout Code') {
    //   steps {
    //     git(url: 'https://github.com/alexisromriv/user-service', branch: 'main')
    //   }
    // }

  }
}