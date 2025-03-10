
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<php
class Livro:
def __init__(self, titulo, autor, preco, estoque):
    self.titulo = titulo
    self.autor = autor
    self.preco = preco
    self.estoque = estoque

def verificar_disponibilidade(self):
    return self.estoque > 0

def reservar_livro(self):
    if self.estoque > 0:
        self.estoque -= 1
        return True
    return False

    
