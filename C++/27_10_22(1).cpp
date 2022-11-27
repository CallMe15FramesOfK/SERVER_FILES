#include<iostream>
using namespace std;
class vector
{
	public:
		
		double a;	
		double b;
		double c;	
		double mn(double x, double y);	
		vector(double x, double y, double z);
		vector();
		~vector();
	friend ostream& operator <<(ostream& os, const vector & ob);
	vector& operator ++(int);
	vector operator+(const vector &ob);
	
};
	vector vector::operator+(const vector &ob){
		double k = ob.a + this->a;
		double l = ob.b + this->b;
		double m = ob.c + this->c;
		vector temp(k,l,m);
		return temp;
		
	}
	vector& vector::operator ++(int){
		this -> a = this -> a + 1;
		this -> b = this -> b + 1;
		this -> c = this -> c + 1;
		return *this;
	}
	
	
	ostream& operator<<(ostream& os, const vector & ob){
		os<<ob.a<<"<<"<<ob.b<<"<<"<<ob.c<<endl;
		return os;
	}
	
	vector::vector(double x,double y, double z):a(x),b(y),c(z){
		
	}
	
	vector::vector():a(0),b(0){
	}
	
	vector::~vector(){
		
	}


int main()
{
	vector obj1(5.5, 3.6, 3.7);
	vector obj2(2.3, 3.5, 2.5);
	cout<<obj1;
	cout<<obj2;
	
	vector obj3 = obj1 + obj2;
	cout<<obj3;
	return 0;
}

double vector::mn(double x, double y){
	
	double w = x*y;
	double s = w * (this -> a)*(this -> b);
	return s;
	
}



