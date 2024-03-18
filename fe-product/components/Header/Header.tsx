"use client";
import Link from "next/link";
import React from "react";
import { usePathname } from "next/navigation";

const navData = [
  {
    name: "home",
    path: "/",
  },
  {
    name: "Product List",
    path: "/product-list",
  },
  {
    name: "Add Product",
    path: "/add-product",
  },
];

const Header = () => {
  const router = usePathname();

  return (
    <div className="fixed bg-[#141414] top-0 left-0 right-0 p-5">
      <div className="flex justify-between w-full">
        <div className="flex item-center font-semibold text-white">React CRUD</div>
        <div className="flex space-x-9">
          {navData.map((link, index) => {
            return (
              <Link
                href={link.path}
                className={`${
                  link.path === router && `text-gray-300`
                } relative flex items-center group text-white hover:text-gray-300 transition duration-300`}
                key={index}
              >
                <div className="text-[14px] capitalize leading-none font-semibold">
                  {" "}
                  {link.name}{" "}
                </div>
              </Link>
            );
          })}
        </div>
      </div>
    </div>
  );
};

export default Header;
