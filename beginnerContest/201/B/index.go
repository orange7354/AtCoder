package main

import (
	"fmt"
	"sort"
)

type Mountain struct {
	Name  string
	Hight int
}

func main() {

	var n int
	fmt.Scan(&n)

	var x = make([]Mountain, n)

	for i := 0; i < n; i++ {
		var name string
		var hight int
		fmt.Scan(&name, &hight)
		x[i] = Mountain{
			Name:  name,
			Hight: hight,
		}
	}

	sort.Slice(x, func(i, j int) bool { return x[j].Hight < x[i].Hight })

	fmt.Println(x[1].Name)

}
