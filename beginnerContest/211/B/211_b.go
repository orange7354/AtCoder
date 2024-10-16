package main

import "fmt"

func main() {
	// H , 2B , 3B , HR
	var m map[string]bool

	m = map[string]bool{
		"H":  false,
		"2B": false,
		"3B": false,
		"HR": false,
	}

	var s1, s2, s3, s4 string

	fmt.Scan(&s1)
	fmt.Scan(&s2)
	fmt.Scan(&s3)
	fmt.Scan(&s4)
	m[s1] = true
	m[s2] = true
	m[s3] = true
	m[s4] = true

	var res bool = true

	for _, v := range m {
		if v == false {
			res = false
			break
		}
	}

	if res {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}
}
