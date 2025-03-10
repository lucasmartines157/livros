 <php
    class SistemaVenda:
    def __init__(self):
        self.usuarios = []  # Lista de usuários cadastrados
        self.livros = []    # Lista de livros disponíveis
        self.usuario_logado = None

    def cadastrar_usuario(self, nome, endereco, telefone, data_nascimento, login, senha):
        usuario = Usuario(nome, endereco, telefone, data_nascimento, login, senha)
        self.usuarios.append(usuario)

    def login_usuario(self, login, senha):
        for usuario in self.usuarios:
            if usuario.verificar_login(login, senha):
                self.usuario_logado = usuario
                return True
        return False

    def cadastrar_livro(self, titulo, autor, preco, estoque):
        livro = Livro(titulo, autor, preco, estoque)
        self.livros.append(livro)

    def buscar_livro(self, titulo):
        return [livro for livro in self.livros if titulo.lower() in livro.titulo.lower()]

    def efetuar_compra(self, carrinho, pagamento):
        livros_indisponiveis = carrinho.verificar_estoque()
        if livros_indisponiveis:
            return f"Os seguintes livros estão indisponíveis para compra: {[livro.titulo for livro in livros_indisponiveis]}"

        total = carrinho.calcular_total()
        if pagamento.validar_cartao():
            for livro in carrinho.itens:
                livro.reservar_livro()  # Reserva o livro após compra
            return f"Compra realizada com sucesso! Total: R${total:.2f}"
        else:
            return "Falha na validação do cartão de crédito."

    def realizar_reserva(self, carrinho):
        for livro in carrinho.itens:
            if not livro.verificar_disponibilidade():
                livro.reservar_livro()
                self.usuario_logado.reservas.append(livro)
        return "Reserva realizada com sucesso."

 ?>