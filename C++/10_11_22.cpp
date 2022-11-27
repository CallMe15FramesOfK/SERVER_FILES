#include<iostream>
#include<vector>
using namespace std;
//v.pop_back() = usuwa elementy od konca
//v.pop_front() = usuwa elementy z poczatku
//v.resize(k) = zmienia wielkosc wektora
template <int n, class typ>
class wektor {
	public: 
	vector<typ> v;
	wektor(typ *tab);
	void wypisz_wektor();
	void zmien_wymiar(int k, typ *tablica);
	//wektor<k,typ> zmien_wymiar(int k, typ *tablica);
};
template<int n, class typ>
wektor<n, typ>::wektor(typ *tab)
{
	for(int i=0;i<n;i++){
		(this -> v).push_back(tab[i]);
	}
}


template<int n, class typ>
void wektor<n, typ>::wypisz_wektor(){
		for(int i=0;i<(this -> v).size();i++){
		cout<<(this -> v)[i]<<endl;
	}
}



int main(){
	double *tab = new double(10);
	for(int i = 0; i<10; i++){
		tab[i] = i;
	}
	
	
	wektor<10, double> v(tab);
	v.wypisz_wektor();
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*
	vector<double> v; // = []
	vector<double>::iterator it;
	
	for(int i = 0; i<10; i++)
	{
		v.push_back(2.0*i); //= append
	}
	
	for(int i=0;i<v.size();i++){
		cout<<v[i]<<endl;
	}

for(it = v.begin(); it!=v.end(); it++){
	
	cout<<*it<<endl; //wywolanie v z uzyciem iteratora it
}
	*/
	return 0;
}




