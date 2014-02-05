## Mitwald Deployment
1. create package with Flow Template
2. download composer to /html
3. remove contents of /html/typo3.flow/
4. try to deploy to /html/typo3.flow/
5. create proper /html/typo3.flow/shared/Configuration/Production/Settings.yaml
6. create relative symlink from /html/typo3.flow/releases/current/Web to /html/typo3.flow/Web (cd /html/typo3.flow/ && ln -s releases/current/Web Web)
7. push first deploy