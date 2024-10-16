package main

import "fmt"

func main() {
	var a, b float64
	var c float64
	fmt.Scan(&a, &b)
	c = (a-b)/3 + b

	fmt.Println(c)
}
