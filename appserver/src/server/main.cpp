#include "receiving.h"
#include "map.h"
#include "units.h"

#include "iostream"
int main() {
  Units::Init();
  Map::Init();
  Network::Run();

  return 0;
}