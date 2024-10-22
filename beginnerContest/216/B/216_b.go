package main

import "fmt"

type Parson struct {
	firstName string
	LastName  string
}

func main() {
	var n int
	fmt.Scan(&n)

	m := map[string]map[string]bool{}

	var res bool
	for i := 0; i < n; i++ {
		var firstName, lastName string
		fmt.Scan(&firstName, &lastName)

		_, ok := m[firstName]
		if !ok {
			m[firstName] = map[string]bool{
				lastName: true,
			}
			continue
		}

		_, exists := m[firstName][lastName]
		if !exists {
			m[firstName][lastName] = true
		} else {
			res = true
		}
	}

	if res {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}

}
