package main

import "fmt"

func main() {
	var s string
	fmt.Scan(&s)
	var res []string
	for _, c := range s {
		stringC := string(c)
		if stringC != "a" && stringC != "i" && stringC != "u" && stringC != "e" && stringC != "o" {
			res = append(res, stringC)
		}
	}

	for _, c := range res {
		fmt.Print(string(c))
	}

	fmt.Println("")
}
