package main

import "fmt"

func main() {
	var s string
	fmt.Scan(&s)

	if s == "Hello,World!" {
		fmt.Println("AC")
	} else {
		fmt.Println("WA")
	}
}
