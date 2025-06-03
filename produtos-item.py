import requests
import xml.etree.ElementTree as ET
import json

# URL do XML
xml_url = "https://www.yopp.com.br/xml/xml.php?Chave==A3boNXZsd2bvdGf2IDO4cDO"

# Requisição
response = requests.get(xml_url)
response.encoding = 'utf-8'
root = ET.fromstring(response.text)

# Namespace usado no XML
ns = {"g": "http://base.google.com/ns/1.0"}

# Lista final de produtos
produtos = []

# Percorre os itens
for item in root.findall(".//item"):
    nome = item.findtext("title") or ""
    preco = item.findtext("g:price", namespaces=ns) or ""
    categoria = item.findtext("g:product_type", namespaces=ns) or ""
    imagem = item.findtext("g:image_link", namespaces=ns) or ""
    link = item.findtext("link") or ""

    produtos.append({
        "nome": nome.strip(),
        "preco": preco.strip(),
        "categoria": categoria.strip(),
        "imagem": imagem.strip(),
        "url": link.strip()
    })

# Salva em JSON
with open("produtos.json", "w", encoding="utf-8") as f:
    json.dump(produtos, f, indent=2, ensure_ascii=False)

print("✅ JSON gerado com sucesso com", len(produtos), "produtos.")
