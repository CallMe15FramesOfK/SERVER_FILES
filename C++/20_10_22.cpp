#include<iostream>
#include<cmath>
#include<cstdlib>
#include<ctime>
using namespace std;


int main(){
	
srand(time(NULL));
double N = 1000;
double k = 0;
int i;
for(i = 0;i<N;i++){
	double x = (double)rand()/RAND_MAX;
	double y = (double)rand()/RAND_MAX;
	if((x*x)+(y*y)<1){
		k++;
	}
}

	cout<<4*(k/N)<<endl;
return 0;
}

/*
double pole(double(*f)(double),int N);
double fun(double x);

int main(){
	cout<<pole(fun,100)<<endl;
	
	
	return 0;
}
double fun(double x){
	return pow(x,3);
}

double pole(double(*f)(double),int N){
	double suma = 0;
	double h = 1.0/N;
	
	
	for(int i = 0;i<N;i++){
		suma+= f(i*h)*h;
	}
	
	return suma;
}


*/




/*
int main(){
	
	double suma = 0;
	int i;
	int N = 100;
	double h = 1.0/N;
	
	for(i = 1;i<N;i++){
		
		
		suma += pow(i*h,2)*h;
	}
	cout<<suma;
	return 0;
}

*/
