import timeit as tim


print(tim.timeit(list))
print(tim.timeit(dict))
print(tim.timeit(set))
print(tim.timeit(tuple))
print(tim.timeit(frozenset))