
    <php
class Usuario:
    def __init__(self, nome, endereco, telefone, data_nascimento, login, senha):
        self.nome = nome
        self.endereco = endereco
        self.telefone = telefone
        self.data_nascimento = data_nascimento
        self.login = login
        self.senha = senha
        self.reservas = []  # Lista de reservas realizadas

    def verificar_login(self, login, senha):
        return self.login = login and self.senha = 'senha';
?>
