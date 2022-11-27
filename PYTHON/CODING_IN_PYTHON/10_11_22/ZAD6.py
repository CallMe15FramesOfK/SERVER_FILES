from ZAD5 import root2


def search(root, key):
    if root is None or root.val == key:
        return root

    if root.val < key:
        return search(root.right, key)

    return search(root.left, key)


# z racji tego ze drzewa sa generowane losowo, wynkik moze nie byc ten sam

print("Wyszukiwanie w drzewie 2 z zad5: ")
print(search(root2, 4))
