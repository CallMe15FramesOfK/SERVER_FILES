#include<iostream>
using namespace std;
class test
{
	public:
		int a;	
		double b;	
		double mn(double x, double y);	
		test(int x, double y);
		test();
		~test();
	friend ostream& operator <<(ostream& os, const test & ob);
	test& operator ++(int);
	test operator+(const test &ob);
	
};
	test test::operator+(const test &ob){
		int k = ob.a + this->a;
		double z = ob.b + this->b;
		test temp(k,z);
		return temp;
		
	}
	test& test::operator ++(int){
		this -> a = this -> a + 1;
		this -> b = this -> b + 1;
		return *this;
	}
	
	
	ostream& operator<<(ostream& os, const test & ob){
		os<<ob.a<<" "<<ob.b<<endl;
		return os;
	}
	
	test::test(int x,double y):a(x),b(y){
		
	}
	
	test::test():a(0),b(0){
	}
	
	test::~test(){
		
	}


int main()
{
	test obj1(1,3.5);
	test obj2(2,3.5);
	cout<<obj1;
	cout<<obj2;
	
	test obj3 = obj1 + obj2;
	cout<<obj3;
	return 0;
}

double test::mn(double x, double y){
	
	double w = x*y;
	double s = w * (this -> a)*(this -> b);
	return s;
	
}



