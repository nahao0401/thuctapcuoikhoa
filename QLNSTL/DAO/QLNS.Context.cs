﻿//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated from a template.
//
//     Manual changes to this file may cause unexpected behavior in your application.
//     Manual changes to this file will be overwritten if the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace DAO
{
    using System;
    using System.Data.Entity;
    using System.Data.Entity.Infrastructure;
    
    public partial class QLNSEntities : DbContext
    {
        public QLNSEntities()
            : base("name=QLNSEntities")
        {
        }
    
        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            throw new UnintentionalCodeFirstException();
        }
    
        public virtual DbSet<BANGCHAMCONG> BANGCHAMCONGs { get; set; }
        public virtual DbSet<BAOHIEM> BAOHIEMs { get; set; }
        public virtual DbSet<BOPHAN> BOPHANs { get; set; }
        public virtual DbSet<CHUCVU> CHUCVUs { get; set; }
        public virtual DbSet<HOPDONG> HOPDONGs { get; set; }
        public virtual DbSet<KHENTHUONG_KYLUAT> KHENTHUONG_KYLUAT { get; set; }
        public virtual DbSet<LOAICA> LOAICAs { get; set; }
        public virtual DbSet<LOAICONG> LOAICONGs { get; set; }
        public virtual DbSet<NHANVIEN> NHANVIENs { get; set; }
        public virtual DbSet<NHANVIEN_PHUCAP> NHANVIEN_PHUCAP { get; set; }
        public virtual DbSet<PHONGBAN> PHONGBANs { get; set; }
        public virtual DbSet<PHUCAP> PHUCAPs { get; set; }
        public virtual DbSet<TANGCA> TANGCAs { get; set; }
        public virtual DbSet<TRINHDO> TRINHDO { get; set; }
        public virtual DbSet<UNGLUONG> UNGLUONGs { get; set; }
    }
}
