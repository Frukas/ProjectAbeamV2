<h2>Ito Tool V2</h2>

Esse é a segunda versão de uma ferramenta para apontamento de tempo.
O back-end foi desenvolvido usando PHP usando a biblioteca PDO para acessar o banco de dados.
O front-end foi desenvolvido utilizando jquery e bootstrap 5.

O back-end se encontra na pasta "App" e dentro dela as seguintes subpastas:
"Classes" - Classes responsáveis por interagir com as tabelass do banco de dados.
"DB" - Classes responsáveis por conectar e interagir com banco de dados MySQL em geral. 
"Service" - Classes responsáveis por receber e lidar com HTTP requests.

O front-end se encontra na pasta "Pages". Dentro dela tem pastas que representam uma página com um arquivo index representando o html e um arquivo script contendo o código javascript. 

TODO:
- Adicionar controle de horas extras.
- Adicionar uma área administrativa para adicionar novos usuários, CLientes e tarefas.
- Melhorar a descrição de variáveis e funções, tirando a mistura de inglês e português atual.
- Melhorar o error handling principalmente em relação a HTTP request.
