from binarytree import tree

root = tree()
print("Drzewo binarne dowolnej dlugosci :")
print(root)

root2 = tree(height=2)
print("Drzewo binarne danej dlugosci :")
print(root2)

root3 = tree(height=2, is_perfect=True)
print("Idealne drzewo binarne danej dlugosci :")
print(root3)