
<php
class CarrinhoDeCompras:
def __init__(self):
    self.itens = []  # Lista de livros adicionados ao carrinho

def adicionar_livro(self, livro):
    self.itens.append(livro)

def remover_livro(self, livro):
    if livro in self.itens:
        self.itens.remove(livro)

def calcular_total(self):
    return sum([livro.preco for livro in self.itens])

def verificar_estoque(self):
    indisponiveis = [livro for livro in self.itens if not livro.verificar_disponibilidade()]
    return indisponiveis

?>

